<!-- Move me to master -->
<!doctype html>
<html>
    
    <head>
        <title>Login</title>
    </head>
    
    <body>
        
        <form method="post" action="">
            
            {{ csrf_field() }}
            
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
            </p>
            
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </p>
            
            <p>
                <button type="submit">Login</button>
            </p>
            
        </form>
        
    </body>
    
</html>