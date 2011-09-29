package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.RemoteService;
import com.google.gwt.user.client.rpc.RemoteServiceRelativePath;
import com.site.twitevent.shared.User;

@RemoteServiceRelativePath("twitterUser")
public interface TwitterUserService extends RemoteService {
	boolean insertUser(User user);
	User selectUser(String email);
	void updateUser(String oldEmail, User user);
	void deleteUser(String email);
}