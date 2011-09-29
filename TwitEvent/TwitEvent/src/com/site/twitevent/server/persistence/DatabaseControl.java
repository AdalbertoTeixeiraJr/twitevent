package com.site.twitevent.server.persistence;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DatabaseControl {
	
	private static DatabaseControl instance;

    public final String driver = "org.postgresql.Driver";
    private final String postgres = "jdbc:postgresql:";
    
    private String database = "twitevent";
    private String username = "postgres";
    private String password = "1";
    private String host = "//localhost";
    private String port = "5432";
    private Connection con;
    
    private DatabaseControl() throws SQLException, ClassNotFoundException {
    	Class.forName(driver);
        con = DriverManager.getConnection(this.postgres + this.host + ":" + this.port + "/" + this.database, this.username, this.password);
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