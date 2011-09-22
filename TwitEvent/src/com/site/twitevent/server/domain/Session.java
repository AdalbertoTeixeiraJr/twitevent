package com.site.twitevent.server.domain;

public class Session {
	
	private User loggedUser;
	
	public Session() {
	}
	
	public void logUser(User user) {
		loggedUser = user;
	}
	
	public void logOutUser() {
		loggedUser = null;
	}
	
	public User getLoggedUser() {
		return loggedUser;
	}
}