<?php

// WildCard Character
// % = Represent zero, one, or multiple
// _ = Represent single character

// PATTERN
// LIKE "a%" starts with a
// LIKE "%a" ends with a
// LIKE "%am%"  am in any position
// LIKE "a%m"  starts with a, end with m
// LIKE "_a%"   a in second position
// LIKE "__a%"   a in third position
// LIKE "_ai"   a in second and i in third position

// LIKE = for search --- SELECT * FROM users WHERE name LIKE "s%"; (get record in which name start from a)
//  and for case sensitive add BINARY --- SELECT * FROM users WHERE BINARY name LIKE "%s"; (get record in which name end with small s) 