REVOKE ALL, GRANT OPTION 
FROM dba;

REVOKE ALL, GRANT OPTION 
FROM dba, joel;

REVOKE UPDATE, DELETE
ON mikesMusic.* FROM joel;

REVOKE UPDATE, DELETE
ON customers FROM joel, dba;

DROP USER joel;
DROP USER dba;