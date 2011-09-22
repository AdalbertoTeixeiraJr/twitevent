package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.RemoteService;
import com.google.gwt.user.client.rpc.RemoteServiceRelativePath;
import com.site.twitevent.server.domain.User;

@RemoteServiceRelativePath("twitEventService")
public interface TwitEventService extends RemoteService {
	
	void logUser(User user);
}