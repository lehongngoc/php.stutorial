<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<html>
<head>
<title>login</title>
</head>
<body>
  <h2>Spring MVC Security - Login with LinkedIn</h2>
  <span style="color: red;">${message}</span> <br/>
  
  
  <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=81xomg6on7p1gw
  &redirect_uri=http://localhost:8080/SpringMvcLinkedIn/login-linkedin&scope=r_basicprofile">Login With LinkedIn</a>
  <c:url value="/authen" var="loginUrl"/>    
  <form name='loginForm' action="${loginUrl}" method='POST'>
    <table>
      <tr>
        <td>User:</td>
        <td><input type='text' name='username'></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type='password' name='password' /></td>
      </tr>
      <tr>
        <td colspan='2'><input name="submit" type="submit" value="login" /></td>
      </tr>
    </table>
    <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}" />
  </form>
</body>
</html>