package com.site.twitevent.server.persistence;

import java.sql.SQLException;

import com.site.twitevent.shared.User;

public interface UserDao {
	public void insertUser(User user) throws SQLException;
	public User selectUser(String email) throws SQLException;
	public void updateUser(String oldEmail, User user) throws SQLException;
	public void deleteUser(String email) throws SQLException;
}