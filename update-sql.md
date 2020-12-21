# Update URL in Database

## Local to Online

```text
UPDATE ltco_options SET option_value = replace(option_value, 'http://localhost/bauminas', 'http://srv114.teste.website/~bauminas') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE ltco_posts SET guid = replace(guid, 'http://localhost/bauminas','http://srv114.teste.website/~bauminas');

UPDATE ltco_posts SET post_content = replace(post_content, 'http://localhost/bauminas', 'http://srv114.teste.website/~bauminas');

UPDATE ltco_postmeta SET meta_value = replace(meta_value,'http://localhost/bauminas','http://srv114.teste.website/~bauminas');

```
