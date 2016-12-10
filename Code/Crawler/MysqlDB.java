import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;

import com.mysql.jdbc.PreparedStatement;

public class MysqlDB {

	private static final boolean DBG = false;
	
	private Connection con = null;
	private Statement stat = null;
	private ResultSet rs = null;
	private PreparedStatement pst = null;
	
	private static final String SERVER_URL = "localhost";
	private static final String SERVER_DATABASE = "BDSTeam24_DB";
	private static final String SERVER_ID = "BDSTeam24";
	private static final String SERVER_PW = "BDSTeam24@2015";
	private static final String SERVER_TABLE = "traffic2";
	
	private static final String CREATE_TABLE_SQL = "CREATE TABLE "+SERVER_TABLE+" (" +
			"  Time        varchar(50)" +
			", Start       varchar(50)" +
			", End         varchar(50)" +
			", Speed       varchar(50)" +
			") charset=utf8;";
	
	public MysqlDB() {
		
	}
	
	public void connect() {
		
		try {
			if (DBG) System.out.println("Start to connect Database");
			Class.forName("com.mysql.jdbc.Driver");
			con = DriverManager.getConnection("jdbc:mysql://"+SERVER_URL+"/"+SERVER_DATABASE+"?useUnicode=yes&characterEncoding=UTF-8", SERVER_ID, SERVER_PW);
			if (DBG) System.out.println("Connect Database successfully");
		} catch (ClassNotFoundException e) {
			if (DBG) System.out.println("ClassNotFoundException "+e.toString());
			e.printStackTrace();
		} catch (SQLException e) {
			if (DBG) System.out.println("SQLException "+e.toString());
			e.printStackTrace();
		}
		
		
	}
	
	private void executeSQL(String sql) {
		try {
			if (DBG) System.out.println("Execute, use SQL:\n"+sql);
			stat = con.createStatement();
			stat.executeUpdate(sql);
			if (DBG) System.out.println("End execute, stat = "+stat);
		} catch (SQLException e) {
			if (DBG) System.out.println("SQLException "+e.toString());
			e.printStackTrace();
		}
		
	}
	
	public void createTrafficTable() {
		executeSQL(CREATE_TABLE_SQL);
	}
	
	public void insertIntoTrafficTable(String time, String start, String end, String speed) {
		String sql = "INSERT INTO " + SERVER_TABLE + " VALUES(" +
				"\"" + time + "\", " +
				"\"" + start + "\", " +
				"\"" + end + "\", " +
				"\"" + speed + "\");";
		executeSQL(sql);
	}

}
