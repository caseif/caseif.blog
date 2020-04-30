<?php
namespace GlobalConfig;

include_once dirname(__FILE__)."/../model/_ext_link.php";
include_once dirname(__FILE__)."/../model/_navbar_link.php";

const SITE_NAME = "caseif.blog";
const SITE_HEADER = "caseif's blog";

const DB_ADDR = "localhost";
const DB_NAME = "blog";
const DB_CRED_FILE = "/etc/blog/credentials.json";

const SIDEBAR_RECENT_POST_COUNT = 5;
const HOME_RECENT_POST_COUNT = 5;
const POST_ABRIDGED_CHARS = 500;

const COPYRIGHT_START = "2013";
const COPYRIGHT_END = null;
const COPYRIGHT_NAME = "Max Roncace";

const CONTACT_EMAIL = "me@caseif.net";

$NAVBAR_LINKS = array(
    new \ImageNavbarLink("https://twitter.com/case_if", "fab", "twitter"),
    new \TextNavbarLink("/about.php", "About")
);

$EXTERNAL_LINKS = array(
    new \ExternalLink("https://caseif.net", "Landing Page"),
    new \ExternalLink("https://github.com/caseif", "GitHub")
);
?>
