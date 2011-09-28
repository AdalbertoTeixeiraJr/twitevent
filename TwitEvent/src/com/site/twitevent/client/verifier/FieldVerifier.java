package com.site.twitevent.client.verifier;

import com.google.gwt.core.client.GWT;
import com.google.gwt.user.client.rpc.AsyncCallback;
import com.site.twitevent.client.VerifierService;
import com.site.twitevent.client.VerifierServiceAsync;

public class FieldVerifier {
	
	private static VerifierServiceAsync verifierSvc = GWT.create(VerifierService.class);
	
	public static boolean isValidMail(String email) {
		final com.site.twitevent.client.atomic.Boolean verifierResult = new com.site.twitevent.client.atomic.Boolean(true);
		
		verifierSvc.isValidMail(email, new AsyncCallback<Boolean>() {
			@Override
			public void onSuccess(Boolean result) {
				System.out.println("Success!");
				verifierResult.setValue(result);
			}
			
			@Override
			public void onFailure(Throwable caught) {
				System.err.println(caught);
			}
		});
		
		return verifierResult.getValue();
	}
	
	public static boolean isPasswordsEqual(String password1, String password2) {
		return password1.equals(password2);
	}
}