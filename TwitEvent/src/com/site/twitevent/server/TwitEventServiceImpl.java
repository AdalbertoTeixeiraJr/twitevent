package com.site.twitevent.server;

import com.google.gwt.user.server.rpc.RemoteServiceServlet;
import com.site.twitevent.client.TwitEventService;
import com.site.twitevent.server.domain.Session;
import com.site.twitevent.server.domain.User;

public class TwitEventServiceImpl extends RemoteServiceServlet implements TwitEventService {
	
	private Session session = new Session();
	
	@Override
	public void logUser(User user) {
		session.logUser(user);
	}

}