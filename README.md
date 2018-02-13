# creactive-plugin

This WordPress plugin was created by me for use on websites at work, where the list of services were too long. 
However, it can be used to hide/display anything as long as it is wrapped within a div with an id starting with 'hidden' in its name.

## Requirements

Create a button that says 'View Our List of Services', when it is clicked, a hidden list of services should appear.
It should have a fade in and fade out effect.

## How it works

Download the zip file from GitHub and install it to your WordPress website.

Create any number of buttons on a page, with the class: viewlist

Add a ul or div element below it with the id. The name of the id should begin with 'hidden' in it and every hidden item should have a unique id.

You can hide an element with the following CSS styles, here is how you would create a hiddenlist id:

#hiddenlist-1 {
    display: none;
    opacity: 0;
    transition: opacity 2s;
}

### Example of Plugin in use

##### Button
<img src="https://www.adnanusman.com/github/button.jpg" alt="button" />

##### Button with List Opened
<img src="https://www.adnanusman.com/github/button-with-list.jpg" alt="button" />

Created by Adnan Usman | <a href="https://github.com/adnanusman/">View my GitHub Profile</a>
