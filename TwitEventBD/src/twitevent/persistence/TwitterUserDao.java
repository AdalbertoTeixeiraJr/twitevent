package twitevent.persistence;

import java.sql.SQLException;

import domain.User;

public interface TwitterUserDao {
	public void insertUser(User user) throws SQLException;
	public User selectUser(String email) throws SQLException;
	public void updateUser(String oldEmail, User user) throws SQLException;
	public void deleteUser(String email) throws SQLException;
}