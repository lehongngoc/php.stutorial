package stackjava.com.springmvclinkedin.controller;
import java.io.IOException;
import javax.servlet.http.HttpServletRequest;
import org.apache.http.client.ClientProtocolException;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.web.authentication.WebAuthenticationDetailsSource;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import stackjava.com.springmvclinkedin.common.LinkedInUser;
import stackjava.com.springmvclinkedin.common.LinkedInUtils;
@Controller
public class BaseController {
  
  @Autowired
  private LinkedInUtils linkedInUtils;
    @RequestMapping(value = { "/", "/login" })
    public String login(@RequestParam(required = false) String message, final Model model) {
      if (message != null && !message.isEmpty()) {
        if (message.equals("logout")) {
          model.addAttribute("message", "Logout!");
        }
        if (message.equals("error")) {
          model.addAttribute("message", "Login Failed!");
        }
        if (message.equals("linkedin_error")) {
          model.addAttribute("message", "Login by LinkedIn Failed!");
        }
      }
      return "login";
    }
  @RequestMapping("/login-linkedin")
  public String loginLinkedIn(HttpServletRequest request) throws ClientProtocolException, IOException {
    String code = request.getParameter("code");
    
    if (code == null || code.isEmpty()) {
      return "redirect:/login?message=linkedin_error";
    }
    String accessToken = linkedInUtils.getToken(code);
    
    LinkedInUser user = linkedInUtils.getUserInfo(accessToken);
    UserDetails userDetail = linkedInUtils.buildUser(user);
    UsernamePasswordAuthenticationToken authentication = new UsernamePasswordAuthenticationToken(userDetail, null,
        userDetail.getAuthorities());
    authentication.setDetails(new WebAuthenticationDetailsSource().buildDetails(request));
    SecurityContextHolder.getContext().setAuthentication(authentication);
    return "redirect:/user";
  }
  @RequestMapping("/user")
  public String user() {
    return "user";
  }
  @RequestMapping("/admin")
  public String admin() {
    return "admin";
  }
  @RequestMapping("/403")
  public String accessDenied() {
    return "403";
  }
}