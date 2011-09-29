package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.AsyncCallback;
import com.site.twitevent.shared.User;

public interface TwitterUserServiceAsync {

	void deleteUser(String email, AsyncCallback<Void> callback);

	void insertUser(User user, AsyncCallback<Boolean> callback);

	void selectUser(String email, AsyncCallback<User> callback);

	void updateUser(String oldEmail, User user, AsyncCallback<Void> callback);
}