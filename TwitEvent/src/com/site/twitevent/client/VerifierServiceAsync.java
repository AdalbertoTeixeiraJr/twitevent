package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.AsyncCallback;

public interface VerifierServiceAsync {

	void isValidMail(String email, AsyncCallback<Boolean> callback);
}