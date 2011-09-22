package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.AsyncCallback;
import com.site.twitevent.server.domain.User;

public interface TwitEventServiceAsync {

	void logUser(User user, AsyncCallback<Void> callback);
}