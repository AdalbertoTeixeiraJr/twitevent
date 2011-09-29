package com.site.twitevent.server.persistence;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DatabaseControl {
	
	private static DatabaseControl instance;

    public final String driver = "com.mysql.jdbc.Driver";
    private final String sgbd = "jdbc:mysql:";
    
    private String database = "twitevent";
    private String username = "root";
    private String password = "1";
    private String host = "//localhost";
    private String port = "3306";
    private Connection con;
    
    private DatabaseControl() throws SQLException, ClassNotFoundException {
    	Class.forName(driver);
        con = DriverManager.getConnection(this.sgbd + this.host + ":" + this.port + "/" + this.database, this.username, this.password);
	}
    
    public static DatabaseControl getInstance() {
    	if (instance == null)
			try {
				instance = new DatabaseControl();
			} catch (SQLException e) {
				e.printStackTrace();
			} catch (ClassNotFoundException e) {
				e.printStackTrace();
			}
    	
    	return instance;
    }
    
    public Connection getConnection() {
    	return con;
    }
}