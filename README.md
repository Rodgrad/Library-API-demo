# Library-API-demo
Demo API providing information about books.

This is a demo API to search book data like the number of pages isbn code or author etc.

***********************************************************************************************************************
!NOTE 
Link bellow does not support CORS because it is hosted on shared hosting, to test API you will need to download code and host it in your local environment.

http://exampletemplates.epizy.com/

What a disappointment, I couldn't find a good host with a free plan for demo. Maybe in the future.

!READ A NOTE
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
    
    

    
    
  
