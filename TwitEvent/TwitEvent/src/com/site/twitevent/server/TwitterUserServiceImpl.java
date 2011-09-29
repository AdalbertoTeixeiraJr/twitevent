package com.site.twitevent.server;

import java.sql.SQLException;

import com.google.gwt.user.server.rpc.RemoteServiceServlet;
import com.site.twitevent.client.TwitterUserService;
import com.site.twitevent.server.persistence.DatabaseUserDao;
import com.site.twitevent.server.persistence.UserDao;
import com.site.twitevent.shared.User;

public class TwitterUserServiceImpl extends RemoteServiceServlet implements
		TwitterUserService {
	
	private static final long serialVersionUID = 1L;
	private UserDao twiterUser = new DatabaseUserDao();
	
	@Override
	public boolean insertUser(User user) {
		try {
			twiterUser.insertUser(user);
		} catch (SQLException e) {
			return false;
		}
		return true;
	}

	@Override
	public User selectUser(String email) {
		User user = null;
		
		try {
			user = twiterUser.selectUser(email);
		} catch (SQLException e) {
			System.out.println(e);
			return null;
		}
		
		return user;
	}

	@Override
	public void updateUser(String oldEmail, User user) {
		// TODO Auto-generated method stub

	}

	@Override
	public void deleteUser(String email) {
		// TODO Auto-generated method stub

	}

}