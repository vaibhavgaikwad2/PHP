<?php

// cookies stores basic data in browser
// did not store this data on server in the form of cookies
// only store data inside the browser
// it is used to do fast loading or makes website fast

// setcookie(name, value, expire, path, domain, secure, httponly)

// name      → (Required) Name of the cookie. Used to retrieve the value later using $_COOKIE['name']
// value     → (Optional) Value to be stored in the cookie. Must be a string.
// expire    → (Optional) Expiry time of the cookie in Unix timestamp format. Use time() + seconds.
//             If not set, cookie expires when the browser closes.
// path      → (Optional) Path on the server where the cookie is accessible. Use "/" for entire website.
// domain    → (Optional) Domain that the cookie is available to. Example: ".example.com" includes subdomains.
// secure    → (Optional) If true, cookie is sent only over HTTPS connections.
// httponly  → (Optional) If true, cookie is accessible only through HTTP (not JavaScript). Adds security.




// ✅ Example:
setcookie("user", "Vaibhav", time() + 3600, "/", "example.com", true, true);

// This will:
// - Set a cookie named "user"
// - Store the value "Vaibhav"
// - Expire in 1 hour
// - Be available on the whole site
// - Work only on the domain example.com
// - Be sent only over secure HTTPS connections
// - Not be accessible via JavaScript (HttpOnly)
setcookie("user", "Vaibhav", time() + 3600, "/");


setcookie("fruit","apple",time()+(86400));

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);
}
else{
    echo "no cookie set";
}



?>