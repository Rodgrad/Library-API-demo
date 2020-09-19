# Library-API-demo
Demo API providing information about books.

This is a demo API to search book data like the number of pages isbn code or author etc, it can be served as monolith or RESTful.

***********************************************************************************************************************

***********************************************************************************************************************


# Separation of concerns

It is advisable to serve public and private from different IPs.


  ## Public side
  
    -WEBpage files are in the root folder   

    -get API key
    -Test Service on our site
  
  
  -API access files:  code snippets for users interaction with private service are located in the folder /userUI/
    
    -Supported languages are:

      -JavaScript
      -Python
      -PHP
        
  
  ## Private side
  
  -Request handler files are in folder /view/
  
      -Search procedure

  
  -Service files are located in folder config/
  
    -API key procedure
    -db connection (not included)
  
  
  -Resource files are in the folder RESOURCES/
  
    -db import
    -data 
    
    

# Test in a local environment
  
  run settings.py or settings.php in a shell or use index.php from browser.
  
# Response data 

  Response data is in JSON format.
    
    

    
    
  
