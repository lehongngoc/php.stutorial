package stackjava.com.springmvclinkedin.common;

public class LinkedInUser {
	private String id;
	private String name;

	public LinkedInUser(String id, String name) {
		this.id = id;
		this.name = name;
	}
	
	public String getId() {
		return id;
	}
	
	public String getName() {
		return name;
	}
}