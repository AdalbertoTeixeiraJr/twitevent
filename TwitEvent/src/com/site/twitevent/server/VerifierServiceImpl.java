package com.site.twitevent.server;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import com.google.gwt.user.server.rpc.RemoteServiceServlet;
import com.site.twitevent.client.VerifierService;

public class VerifierServiceImpl extends RemoteServiceServlet implements VerifierService {
	
	private static final long serialVersionUID = -3743425446597605562L;

	@Override
	public boolean isValidMail(String email) {
		if (email == null)
             return false;
	     String expression = "^[\\w\\-]+(\\.[\\w\\-]+)*@([A-Za-z0-9-]+\\.)+[A-Za-z]{2,4}$";
	     Pattern pattern = Pattern.compile(expression, Pattern.CASE_INSENSITIVE);
	     Matcher pesquisa = pattern.matcher(email);
	     return pesquisa.matches();
	}
}