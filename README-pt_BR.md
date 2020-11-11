# Produtos Mais Vendidos

## Instalação

Para baixar o módulo via composer, execute o código abaixo.

```sh
  composer require magezil/module-bestseller
```

### Requisitos do Sistema

> **Versão mínima:** 2.O
>
> **Versão desenvolvida:** 2.4.1
>
> **Versão do PHP:** 7.4
>
> **Versão estável**: 1.0
>
> **Licença:** OSL-3.0/AFL-3.0

---

## Admin do Magento

Esse módulo adiciona um bloco na página de produtos, no qual insere todos os produtos que foram comprados frequentemente com o produto da página. É possível editar o título do bloco e quantos produtos serão exibidos nesse bloco. Para habilitar o módulo siga os passos abaixo:
  - **Passo 1:** Magento admin --> Lojas --> Configurações --> Configuração
  - **Passo 2:** Tab _Magezil_ --> Seção _Frequentemente Comprados Juntos_ --> Grupo _Configurações Gerais_
  - **Passo 3:** Habilitar Módulo = Sim

Esse módulo adiciona um bloco na página de produtos, no qual busca na lista de Relatórios
This module provides a bestsellers products block, which insert all products that were most purchased. It is possible to edit the title and how many products will display in this block. To enable this module, follow these steps:
  - **Step 1:** Magento admin -> Stores -> Settings -> Configurations
  - **Setp 2:** Tab _Magezil_ -> Section _Bestsellers Products_ -> Group _General Configuration_
  - **Setp 3:** Enable Module = Yes

### General settings

This module provides some settings in admin:
  - Show block only when the user is logged in;
  - Edit title block;
  - Quantity of products to display on frontend (to do not apply this filter, just leave it empty).

### Cards settings

This module provides some settings to cards in this block to:
  - Use the default Magento product listing or a custom template with the next settings.
  - Show button add to wishlist in list products;
  - Show button add to compare in list products;
  - Show quantity products to add to cart in list products.





To insert this block on a page, follow theses steps:
  - Show block only when the user is logged in;
  - Edit title block;
  - Quantity of products to display on frontend (to do not apply this filter, just leave it empty).

To insert this block on a page, follow theses steps:
  - **Step 1:** Magento Admin -> Content -> Elements -> Page
  - **Step 2:** _Select your page_
  - **Step 3:** Add block in a page content
    - {{block class="Magezil\Bestseller\Block\Product\BestSellerListing"}}