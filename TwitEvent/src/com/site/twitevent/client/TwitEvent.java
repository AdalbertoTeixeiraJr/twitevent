package com.site.twitevent.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.user.client.ui.RootPanel;

public class TwitEvent implements EntryPoint {
	
	public void onModuleLoad() {
		RootPanel.get().add(new PanelPrincipal());
	}
}
