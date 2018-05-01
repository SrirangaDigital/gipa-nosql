<?php
//Collections
define('ARTEFACT_COLLECTION', 'artefacts');
define('ARTICLES_COLLECTION', 'articles');
define('ALPHABET_COLLECTION', 'alphabet');
define('ARTEFACT_KEYS_COLLECTION', 'artefacts_keys');
define('FOREIGN_KEY_COLLECTION', 'foreignKeys');
define('FULLTEXT_COLLECTION', 'fulltext');
define('USER_COLLECTION', 'userdetails');

//Default Values
define('GIPA', '002');
define('SHOW_ONLY_IF_DATA_EXISTS', True);
define('SHOW_PDF', True);
define('DEFAULT_TYPE', 'Letter');
define('DEFAULT_LETTER', 'A');
define('DEFAULT_PARAM', 'year');
define('MISCELLANEOUS_NAME', 'ಇತರೆ');
define('FOREIGN_KEY_TYPE', 'ForeignKeyType');

// Lazy loading setting
define('PER_PAGE', 10);
define('NO_SKIP', 0);
define('NO_LIMIT', 1000000);
define('FULLTEXT_SNIPPET_SIZE', 8);
define('PHOTO_FILE_EXT', '.JPG');

// External resource setting
define('EXTERNAL_RESOURCE', 'external.html');
define('EXTERNAL_RESOURCE_NOT_EXISTS', 'application/views/error/noExternalResource.php');

// user settings (login and registration)
define('REQUIRE_EMAIL_VALIDATION', False);//Set these values to True only
define('REQUIRE_RESET_PASSWORD', False);//if outbound mails can be sent from the server
define('REQUIRE_GIT_TRACKING', True);
define('REQUIRE_GITHUB_SYNC', False);


// archive variables
define('NAV_ARCHIVE_VOLUME', 'Volumes');
define('NAV_ARCHIVE_ARTICLES', 'Articles');
define('NAV_ARCHIVE_AUTHORS', 'Authors');
define('NAV_ARCHIVE_FEATURES', 'Feature');
define('NAV_ARCHIVE_SEARCH', 'Search');
define('SEARCH_ARTICLE', 'Articles');
define('SEARCH_AUTHOR', 'Authors');
define('SEARCH_FEATURE', 'Feature');
define('SEARCH_WORD', 'Word');
define('SEARCH_SEARCH', 'Search');
define('SEARCH_RESET', 'Reset');
define('SEARCH_RESULTS', 'Results');
define('ARCHIVE_STRUCTURE_TYPE', 'text'); //can take either pictorial or textual
define('ARCHIVE_VOLUME', 'Volumes');
define('ARCHIVE_YEAR', 'Year');
define('ARCHIVE_ISSUE', 'Issue');
define('ARCHIVE_MONTH', 'Month');
define('ARTICLES', 'Articles');
define('ARCHIVE', 'Archive');
define('AUTHORS', 'Authors');
define('FEATURE', 'Feature');
define('SEARCH', 'Search');
define('SERIES', 'Series Articles');
define('TOC', 'Table Of Content');
define('DOWNLOAD_PDF', 'Download PDF');

// css variables
define('ARCHIVE_BASE_FONT_SIZE', '13px'); //for Nudi = 18px, English = 16px, Devanagari = 18px
define('AUTHOR_PREFIX', '—');
define('AUTHOR_JOINER', '&');
?>
