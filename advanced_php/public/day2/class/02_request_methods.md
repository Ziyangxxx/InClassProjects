# Request Methods

When we are using Ajax, we have all the HTTP Request Methods available to us:

`GET`, `HEAD`, `POST`, `PUT`, `PATCH`, `DELETE`


* GET - Request data from the server
* HEAD - Return headers without body (not normally used)
* POST - For creating new record on server
* PUT/PATCH - Update existing record on server
* DELETE - Delete a record on server

## Sending data by GET or POST

There are only two types of methods you can send from HTML:
* `GET` and `POST`
* set content type xhr to `x-www-form-urlencoded`
* When we set that content type, we're telling the server, to treat any submitted data as if it came from a standard HTML form
* This means means the data can be found in the `$_GET` or `$_POST` SuperGlobals
* It also means you have to send the data as a urlencoded string:
	- `first=Dave&last=Jones&email=dave@example.com`
* If sending GET, append the data to the url in the `open()` method
* If sending POST, add the data as a parameter in the `send()` method

## Sending data by PUT, PATCH< or DELETE

When we send data using PUT, PATCH or DELETE, we need to send it another way, because there's no way PHP can put this data in any of the SuperGlobals.  Instead we need to extract it from the header payload that is sent by the browser.

* Best practice, create data as an object in Javascript
* Do NOT use the `x-www-form-urlencoded` content type header
* Add the data converted to a string in the send() method (JSON.stringify(data))
* On the server, in PHP, you can find this data, as a JSON string, in the `php://input` stream
* You can access it using `file_get_contents('php://input')`
* Then convert to a standard PHP variable using `json_decode`





