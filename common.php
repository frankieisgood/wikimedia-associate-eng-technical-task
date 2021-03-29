<?php

function escape($html) {
    return htmlspecialchars($html, ENT_Quotes | ENT_SUBSTITUTE, "UTF-8");
}