import java.net.*;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Timer;
import java.util.TimerTask;
import java.io.*;

public class WebSpider extends TimerTask {

	private static final boolean DBG = false;
	
	private static MysqlDB db;
	
	public static void main(String[] args) {
		
		db = new MysqlDB();
		db.connect();
//		db.createTrafficTable();
		
		while (true) {
			try {
				runSpider();
				System.out.println("running...");
				Thread.sleep(60000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}
	
	@Override
	public void run() {
	}
	
	private static void runSpider() {
		try {
			String urlNumStr[] = {
					"10010", // 國道1號      (1)
					"10019", // 國1高架      (2)
					"10031", // 國道3甲      (3)
					"10038", // 港西聯外道路  (4)
					"10039", // 南港聯絡道    (5)
					"10020", // 國道2號      (6)
					"10030", // 國道3號      (7)
					"10040", // 國道4號      (8)
					"10050", // 國道5號      (9)
					"10060", // 國道6號      (10)
					"10080", // 國道8號      (11)
					"10100"//, // 國道10號     (12)
//					"20620", // 快速公路62號  (13)
//					"20640", // 快速公路64號  (14)
//					"20660", // 快速公路66號  (15)
//					"20680", // 快速公路68號  (16)
//					"20720", // 快速公路72號  (17)
//					"20740", // 快速公路74號  (18)
//					"20760", // 快速公路76號  (19)
//					"20780", // 快速公路78號  (20)
//					"20820", // 快速公路82號  (21)
//					"20840", // 快速公路84號  (22)
//					"20860", // 快速公路86號  (23)
//					"20880"  // 快速公路88號  (24)
			};
			
			for (int i = 0; i < urlNumStr.length; i++) {
				if (DBG) System.out.println("URL,STR = "+urlNumStr[i]);
				
				// find date
				SimpleDateFormat sdFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm");
				Date date = new Date();
				String strDate = sdFormat.format(date);
				if (DBG) System.out.println("DateTime = "+strDate);
				
				// get content
				URL url = new URL("http://1968.freeway.gov.tw/traffic/index/fid/"+urlNumStr[i]);
				BufferedReader buf = new BufferedReader(new InputStreamReader(url.openStream(),"utf-8"));
				String line = "";
				StringBuffer sb = new StringBuffer();
				while((line = buf.readLine()) != null ) {
					if (line.contains("speed speedLeft")) {
						String speedStr[] = new String[3];
						speedStr[0] = line;
						speedStr[1] = buf.readLine();
						speedStr[2] = buf.readLine();
						saveInMysql(Integer.toString(i+1), strDate,speedStr); // casue i from 0 to n, and 國道一號's id is 1, 
					}
				}
			}
			
			
		} catch (MalformedURLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (UnsupportedEncodingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	private static void saveInMysql(String roadId, String dateTime, String[] threeLines) { // return null if not match
		
		// check web source code match the speed syntax
		if (threeLines.length != 3) return;
		if (!threeLines[1].contains("sec_name")) return;
		
		// find start, end, speed to north(east), speed to south(west)
		String dbgStr = "", roadSection, speed1, speed2, start, end;
		speed1 = threeLines[0].substring(threeLines[0].indexOf(">")+1, threeLines[0].indexOf("</td>"));
		roadSection = threeLines[1].substring(threeLines[1].indexOf(">")+1, threeLines[1].indexOf("</td>"));
		start = roadSection.substring(roadSection.indexOf("(")+1, roadSection.indexOf(")"));
		end = roadSection.substring(roadSection.lastIndexOf("(")+1, roadSection.lastIndexOf(")"));
		speed2 = threeLines[2].substring(threeLines[2].indexOf(">")+1, threeLines[2].indexOf("</td>"));
		
		// insert into mysql
		db.insertIntoTrafficTable(dateTime, roadId+"-"+start, roadId+"-"+end, speed1);
		db.insertIntoTrafficTable(dateTime, roadId+"-"+end, roadId+"-"+start, speed2);
		
		// show log
		dbgStr += dateTime + ", roadId(" + roadId + "), "
				+ roadSection + ", (" + start + "," + end + "), "
				+ speed1 + ","
				+ speed2;
		if (DBG) System.out.println(dbgStr);
	}

}
