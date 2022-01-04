---
title: Advanced PHP - Lecture 1
---
# Introduction: PHP and Javascript

This course doesn't so much extend your knowledge of PHP, as it does introduce you to the idea of PHP working hand in hand with other technologies.  In particular, we will be looking at how PHP and Javascript can work together to create a more applike experience for users.

To refresh your memory...

* Both Javascript and PHP are C style languages that share a similar syntax.
* Javascript is loaded into the browser, and is executed in the browser.
* PHP is executed on the server.
* PHP is executed BEFORE the user sees the HTML page
* Javascript is executed AFTER the user sees the HTML page


## Server Side Rendering

PHP is used, traditionally, for Server Side Rendering (SSR).  Server Side Rendering is the the process of building an HTML page from a variety of components (includes), populating it with data (MySQL), than sending it to the browswer as a finished HTML document.  The only work the browser has to do is to parse and display the HTML, which happens very quickly.  This is what you have been doing so far, including your PHP Capstone Project.  This is the traditional, and still widely used approach to Web development.  Many server side languages can be used to do this including PHP, Ruby, Python, Perl, C# in .NET, Java, and even Javascript running in a Node.js server.

![](server_side_rendering.jpg)

## Client Side Rendering

Javascript is used, traditionally, for Client Side Rendering (CSR).  Client side Rendering is the process of building an HTML page, including all its data, in the browser.  An empty HTML page is loaded first, then Javascript is used to add a variety of components, including data that can be queried from the server  This approach gained popularity with Javascript frameworks like Angular and React, and led to the popularity of Single Page Applications (SPA).  While CSR can lead to more applike user experience, it can also lead to a very slow First Paint of a web page, that may seem stuck or frozen until all Javascript and data has been loaded.

![](client_side_rendering.jpg)

## Neither approach is perfect

There are benefits and pitfals to both SSR and CSR.  SSR can take longer to build the page on the server (as opposed to sending an empty HTML file), and requires a new page to be loaded every time a link is clicked, but once loaded pages are immedately interactive and useable.  CSR can take longer to load the initial page of data, but subsequent pages can be rendered without haveing to make a second trip to the server, creating a more applike and fluid experience.  

## Pre-Rendering

A third approach gaining popularity is a hybrid of CSR and SSR called Pre-Rendering, where an initial page is loaded using SSR, with all its components and data, but subsequent interactivity can be handled using CSR techniques like Ajax/XHR.  In this approach, any Server Side Rendering language can be used for the initial page load, even static pre-rendered HTML, with additional rendering and data loading performed almost exclusively in the browser using Javascript.

In this course, we will be looking primarily at the hybrid approach: rendering an initial page and its data with PHP, but enhancing additional interactivity by using Javascript and Ajax/XHR techniques.  

PHP's role in the Pre-Rendering approach:

* Render initial components and data to serve as HTML
* Provide an API to allow Javascript to update data in the background

![](pre_rendering.jpg)


**More information**

Rendering on the Web, Google Developers: [https://developers.google.com/web/updates/2019/02/rendering-on-the-web](https://developers.google.com/web/updates/2019/02/rendering-on-the-web)







