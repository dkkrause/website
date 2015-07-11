//
// dkkrause consulting services
// Copyright (c) Donald Krause 2014. All Rights Reserved. No part of this website may be
// reproduced without Donald Krause's express consent.
//
// dkkrauseconsulting.js - small amount of javascript for the web site. Does global text replacement
//                         for company name, subname and slogan, and manages the sidebar menu.
//

var corpName = "dkkrause";
var corpSubName = "consulting services";
var corpFullName = corpName + " " + corpSubName;
var corpSlogan = "making your product development work";
var description = corpFullName + " - " + corpSlogan;

// Hides a section.  Can pass a class (".class") or an id ("#id"), any selector really.
function hideSection(button, section) {
    $(button).removeClass("menuitemselected");
    $(section).hide();
}

// Shows a section. Can pass a class (".class") or an id ("#id"), any selector really.
function showSection(button, section) {
    $(button).addClass("menuitemselected");
    $(section).show();
}

// Is this item an expandable submenu?
function expandable(selector) {
    return $(selector).hasClass("expandable");
}

function expandMenu(id) {
    if (expandable(id)) {
        $(id + "submenu").slideDown(250);
        var text = $(id).text();
        $(id).empty();
        $(id).text(text + " ");
        $(id).append("<span class=\"imghelper\"><img " +
                          "src=\"/images/collapse.png\" style=\"vertical-align:middle;\" alt=\"collapse\"/></span>")
    }
}

function collapseMenu(id) {
    if (expandable(id)) {
        $(id + "submenu").slideUp(250);
        var text = $(id).text();
        $(id).empty();
        $(id).text(text + " ");
        $(id).append("<span class=\"imghelper\"><img " +
                          "src=\"/images/expand.png\" style=\"vertical-align:middle;\" alt=\"expand\"/></span>")
    }
}

function collapseAllMenus() {
    $(".expandable").each( function () {
        var id = "#" + $(this).attr('id');
        collapseMenu(id);
    })
}

// If a menuitem is clicked, show the corresponding section on the right
// If a submenuitem is clicked toggle the submenu and show the corresponding section on the right
function menuClicked () {
    var id = $(this).attr("id");
    if (id !== "") {
        id = "#" + id;
        if (expandable(id) === true) {
            if ($(id + "submenu").css("display") === "block") {
                collapseMenu(id);
            } else {
                collapseAllMenus();
                expandMenu(id);
            }
        }
        hideSection(".menuitem", ".section");
        hideSection(".submenuitem", ".section");
        showSection(id, id + "body");
    }
}

$(document).ready(function() {
    $(".corpname").text(corpName);
    $(".corpsubname").text(corpSubName);
    $(".corpfullname").text(corpFullName);
    $(".corpslogan").text(corpSlogan);
    var firstMenuItem = "#" + $(".menuitem").first().attr("id");
    collapseAllMenus();
    if (expandable(firstMenuItem)) { expandMenu(firstMenuItem); };
    hideSection(".menuitem", ".section");
    showSection(firstMenuItem, firstMenuItem + "body");
    $(".menuitem").click(menuClicked);
    $(".submenuitem").click(menuClicked);
});

