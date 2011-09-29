package com.site.twitevent.server.persistence;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.site.twitevent.shared.User;

public class DatabaseTwitterUserDao implements TwitterUserDao {
	
	private DatabaseControl dc;
	
	private final static String INSERT_USER = "INSERT INTO twitterUser VALUES (?, ?);";
	private final static String SELECT_USER = "SELECT * FROM twitterUser WHERE email = ?;";
	private final static String UPDATE_USER = "UPDATE twitteruser SET email = ?, password = ? WHERE email = ?";
	private final static String DELETE_USER = "DELETE FROM twitterUser WHERE email = ?;";
	
	public DatabaseTwitterUserDao() {
		dc = DatabaseControl.getInstance();
	}
	
	@Override
	public void insertUser(User user) throws SQLException {
		PreparedStatement s = dc.getConnection().prepareStatement(INSERT_USER);
		s.setString(1, user.getEmail());
		s.setString(2, user.getPassword());
		s.execute();
		s.close();
	}
	
	@Override
	public User selectUser(String email) throws SQLException {
		PreparedStatement s = dc.getConnection().prepareStatement(SELECT_USER);
		s.setString(1, email);
		ResultSet rs = s.executeQuery();
		
		User user = null;
		
		while (rs.next()) {
			String password = rs.getString("password").trim();
			user = new User(email, password);
		}
		
		s.close();
		rs.close();
		
		return user;
	}

	@Override
	public void updateUser(String oldEmail, User user) throws SQLException {
		PreparedStatement s = dc.getConnection().prepareStatement(UPDATE_USER);
		s.setString(1, user.getEmail());
		s.setString(2, user.getPassword());
		s.setString(3, oldEmail);
		s.execute();
		s.close();
	}

	@Override
	public void deleteUser(String email) throws SQLException {
		PreparedStatement s = dc.getConnection().prepareStatement(DELETE_USER);
		s.setString(1, email);
		s.execute();
		s.close();
	}
}