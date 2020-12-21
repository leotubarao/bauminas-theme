# Formulários do site

## Formulário Geral

```text
[text* name-field class:form-control id:name-field placeholder "Nome"]
[email* email class:form-control id:email-field placeholder akismet:author_email placeholder "E-mail"]
[tel* telephone-field class:form-control id:telephone-field placeholder "Telefone"]
[tel* mobile-field class:form-control id:mobile-field placeholder "Celular"]
[text* citystate-field class:form-control id:citystate-field placeholder "Cidade/Estado"]
[select* interest-select class:form-control id:interest-select class:custom-select first_as_label "Área de Interesse*" "Comercial – ÁGUAS" "Comercial – AGRO" "Suporte Técnico" "Marketing" "Logística" "Compras"]
[submit class:btn class:btn-primary "Enviar"]
```

## Formulário de Currículo

```text
[text* name-field class:form-control id:name-field placeholder "Nome"]
[email* email class:form-control id:email-field placeholder akismet:author_email placeholder "E-mail"]
[tel* telephone-field class:form-control id:telephone-field placeholder "Telefone"]
[text* citystate-field class:form-control id:citystate-field placeholder "Cidade/Estado"]
<div class="custom-file">
  [file* file-cv-field filetypes:pdf|word id:file-cv-field class:custom-file-input]
  <label class="custom-file-label" for="file-cv-field">Anexar arquivo</label>
</div>
[submit class:btn class:btn-primary "Enviar"]
```

## Formulário de Denúncia

```text
<div class="custom-control custom-switch">
  [checkbox identify-checkbox id:identify-checkbox class:custom-control-input]
  <label class="custom-control-label" for="identify-checkbox">Identificada</label>
</div>
[group anonimo]
  [text* name-field class:form-control id:name-field placeholder "Nome"]
  [email* email class:form-control id:email-field placeholder akismet:author_email placeholder "E-mail"]
  [tel* telephone-field class:form-control id:telephone-field placeholder "Telefone"]
  [text* citystate-field class:form-control id:citystate-field placeholder "Cidade/Estado"]
[/group]
[textarea* message-field class:form-control placeholder "Mensagem"]
<div class="custom-file">
  [file* file-field filetypes:pdf|word id:file-field class:custom-file-input]
  <label class="custom-file-label" for="file-field">Anexar arquivo</label>
</div>
[submit class:btn class:btn-primary "Enviar"]
```
