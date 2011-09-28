package com.site.twitevent.client;

import com.google.gwt.user.client.rpc.RemoteService;
import com.google.gwt.user.client.rpc.RemoteServiceRelativePath;

@RemoteServiceRelativePath("verifier")
public interface VerifierService extends RemoteService {
	boolean isValidMail(String email);
}