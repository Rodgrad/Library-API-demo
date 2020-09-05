import requests


url = "http://localhost/api/view/get_resource.php?search=Hatchet"

headers = {
    'book-host': "http://localhost/api/",
    'apikey': "3a05a3775128b2d7c03bf98b312fac24fbaefb1435663533383261643362663665"
    }

response = requests.request("GET", url, headers=headers)

print(response.text)
