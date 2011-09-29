package twitevent;

import java.sql.SQLException;

import twitevent.persistence.DatabaseTwitterUserDao;
import twitevent.persistence.TwitterUserDao;
import domain.User;


public class Main {
	public static void main(String[] args) throws SQLException {
		TwitterUserDao twitterUser = new DatabaseTwitterUserDao();
		User user = twitterUser.selectUser("Andre");
		System.out.println(user);
		user.setEmail("Te hehe");
		twitterUser.insertUser(user);
		System.out.println(twitterUser.selectUser(user.getEmail()));
		String email = user.getEmail();
		user.setEmail("Hooray");
		user.setPassword("Pass");
		twitterUser.updateUser(email, user);
		System.out.println(twitterUser.selectUser(user.getEmail()));
		twitterUser.deleteUser(user.getEmail());
		System.out.println(twitterUser.selectUser(user.getEmail()));
	}
}