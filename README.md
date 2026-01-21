# Documentação Técnica do Site - Portfólio Serifo Baldé

## Visão Geral

Site responsivo de portfólio/CV pessoal desenvolvido em HTML5, CSS3, JavaScript e PHP, com suporte multilíngue (Português, Inglês, Francês) e tema personalizável.

---

## Arquitetura e Estrutura

### Estrutura de Diretórios
```
cv_online_backup/
├── index.html                 # Versão principal (Português)
├── en/                        # Versão em Inglês
│   ├── index.html
│   ├── blog/
│   ├── projects/
│   ├── php/
│   └── styleswitcher/
├── fr/                        # Versão em Francês
│   ├── index.html
│   ├── blog/
│   ├── projects/
│   ├── php/
│   └── styleswitcher/
├── blog/                      # Blog (Português)
├── projects/                  # Projetos (Português)
├── php/                       # Backend PHP
├── css/                       # Estilos CSS
├── js/                        # Bibliotecas JavaScript
├── fonts/                     # Fontes personalizadas
├── colors/                    # Temas de cores
├── images/                    # Imagens e assets
└── styleswitcher/            # Sistema de troca de temas
```

---

## Tecnologias Utilizadas

### Frontend

#### HTML5
- **Doctype**: `<!DOCTYPE html>`
- **Estrutura Semântica**: `<header>`, `<section>`, `<article>`, `<nav>`, `<footer>`
- **Meta Tags**: Responsive design, SEO, Open Graph
- **Atributos**: `data-*` para configuração de temas e animações
- **Compatibilidade**: Suporte IE9+ com HTML5 Shiv

#### CSS3

**Framework Principal**:
- **Bootstrap 3.3.6**: Grid system, componentes, utilitários
- **Font Awesome 4.x**: Ícones vetoriais
- **Flaticon**: Ícones personalizados

**Estilos Personalizados**:
- **style.min.css**: CSS principal minificado
- **animations.css**: Animações CSS3 keyframes
- **Cores Temáticas**: 6 temas disponíveis (blue, orange, green, red, violet, yellow)

**Recursos CSS3**:
- **Flexbox**: Layout flexível
- **Grid System**: Bootstrap grid (12 colunas)
- **Transições**: Animações suaves (0.1s ease-in-out)
- **Media Queries**: Design responsivo
- **Transforms**: Animações 3D e 2D
- **Backface Visibility**: Otimização para animações
- **Custom Properties**: Variáveis CSS

#### JavaScript

**Bibliotecas Principais**:
- **jQuery 1.10.2**: Framework JavaScript principal
- **Bootstrap JS 3.3.6**: Componentes interativos Bootstrap

**Plugins jQuery**:
- **jQuery Validate 1.11.1**: Validação de formulários
- **jQuery Waypoints 2.0.4**: Eventos de scroll
- **jQuery Appear**: Detecção de elementos visíveis
- **Owl Carousel**: Slider/carousel responsivo
- **jQuery Easing**: Animações avançadas
- **jQuery LocalScroll/ScrollTo**: Scroll suave
- **jQuery FitVids**: Vídeos responsivos

**Funcionalidades Customizadas**:
- **custom.js**: Lógica principal do site
- **GoogleMap-light.js**: Configuração do Google Maps
- **styleswitcher.js**: Sistema de troca de temas

### Backend

#### PHP
- **Versão**: PHP 7.x compatível
- **Funcionalidade**: Formulário de contato
- **Segurança**: Validação básica e sanitização
- **Email**: Função mail() nativa

---

## Recursos e Funcionalidades

### Sistema Multilíngue
- **Idiomas Suportados**: Português (principal), Inglês, Francês
- **Estrutura**: Diretórios separados por idioma
- **Navegação**: Links relativos entre idiomas
- **Conteúdo**: Textos localizados em cada idioma

### Sistema de Temas
- **Tema Principal**: 6 variações de cores
- **Implementação**: CSS dinâmico via JavaScript
- **Cores Disponíveis**:
  - Blue (#25b5f1)
  - Orange (#ff6600)
  - Green (#8cc63f)
  - Red (#ff3333)
  - Violet (#8b5a99)
  - Yellow (#ffb600)
- **Estilos Switcher**: Interface para troca de temas

### Design Responsivo
- **Breakpoints**:
  - Desktop: >1200px
  - Tablet: 768px-992px
  - Mobile: <768px
- **Grid System**: Bootstrap 3 (12 colunas)
- **Imagens**: Responsivas com max-width: 100%
- **Tipografia**: Escalável com rem/em

### Animações e Interações

**Animações CSS3**:
- **Fade In**: Aparecimento suave
- **Slide**: Entrada lateral/direcional
- **Zoom**: Efeito de aproximação
- **Bounce**: Efeito elástico
- **Flip**: Rotação 3D

**JavaScript Interactions**:
- **Scroll Animations**: Animações ativadas por scroll
- **Hover Effects**: Efeitos interativos
- **Form Validation**: Validação em tempo real
- **Smooth Scrolling**: Navegação suave
- **Lazy Loading**: Carregamento otimizado

### Seções do Site

#### 1. Header/Navigation
- **Logo**: Imagem pessoal
- **Menu Principal**: Links âncora para seções
- **Navegação Vertical**: Layout fixo lateral
- **Menu Responsivo**: Adaptável mobile

#### 2. Profile Section
- **Background**: Imagem de fundo com overlay
- **Informações Pessoais**: Nome, profissão
- **Redes Sociais**: Links para perfis
- **Contato Rápido**: Email, telefone, localização

#### 3. Resume Section
- **About Me**: Descrição pessoal
- **Skills**: Barras de progresso animadas
- **Specialities**: Ícones e descrições
- **Education/Work**: Timeline interativa
- **Languages**: Níveis de proficiência
- **Hobbies**: Lista de interesses

#### 4. Portfolio Section
- **Grid Layout**: Galeria de projetos
- **Filtros**: Categorização por tipo
- **Modal/Popup**: Detalhes do projeto via AJAX
- **Preview Cards**: Imagens com overlay informativo

#### 5. Blog Section
- **Carousel**: Slider de posts recentes
- **Post Cards**: Imagem + resumo
- **Metadata**: Data, autor, categoria
- **Navigation**: Controles de navegação

#### 6. Contact Section
- **Google Maps**: Mapa interativo customizado
- **Formulário de Contato**: Validado
- **Informações**: Endereço, email, telefone
- **Social Links**: Ícones de redes sociais

### Formulário de Contato

**Frontend Validation**:
- **jQuery Validate**: Validação client-side
- **Campos Obrigatórios**: Nome, email, mensagem
- **Validação Email**: Formato de email
- **Tamanhos Mínimos**: Configuráveis

**Backend Processing**:
- **PHP Script**: Processamento do formulário
- **Segurança**: Sanitização de inputs
- **Email**: Envio via função mail()
- **Respostas**: AJAX success/error handling

---

## Performance e Otimização

### Carregamento de Assets
- **CSS Minificado**: style.min.css
- **JavaScript Comprimido**: Bibliotecas minificadas
- **Imagens Otimizadas**: Formatos webp/jpg
- **Lazy Loading**: Carregamento progressivo

### Caching
- **Browser Cache**: Headers de cache configurados
- **Retina Images**: Detecção automática de DPI
- **CDN Ready**: Estrutura preparada para CDN

### SEO e Acessibilidade
- **Meta Tags**: Open Graph, Twitter Cards
- **Semântica HTML5**: Estrutura significativa
- **Alt Text**: Descrições de imagens
- **Keyboard Navigation**: Acessibilidade via teclado

---

## Google Maps Integration

### Configuração
- **API Key**: Google Maps JavaScript API
- **Estilo Personalizado**: Tema dark/light
- **Marcador**: Localização personalizada
- **Responsivo**: Adaptação ao container

### Features
- **Styled Maps**: Customização visual
- **Info Windows**: Informações do local
- **Zoom Controls**: Controles de navegação
- **Mobile Friendly**: Touch interactions

---

## Browser Compatibility

### Desktop Browsers
- **Chrome**: Versões recentes
- **Firefox**: Versões recentes
- **Safari**: 9+
- **Edge**: Versões recentes
- **IE**: 9+ (com polyfills)

### Mobile Browsers
- **iOS Safari**: 9+
- **Chrome Mobile**: Versões recentes
- **Samsung Internet**: Versões recentes

---

## Segurança

### Frontend
- **XSS Prevention**: Sanitização básica
- **CSRF Protection**: Tokens em formulários
- **Input Validation**: Validação client-side

### Backend
- **Email Injection Protection**: Headers validados
- **Input Sanitização**: Trim e escape
- **Rate Limiting**: Sugestão de implementação

---

## Manutenção e Deploy

### Desenvolvimento Local
- **Servidor Web**: Apache/Nginx com PHP
- **Browsersync**: Para desenvolvimento em tempo real
- **Live Reload**: Atualização automática

### Deploy
- **FTP/SFTP**: Upload direto dos arquivos
- **Permissions**: 755 para diretórios, 644 para arquivos
- **PHP Requirements**: PHP 5.4+ recomendado

---

## Estatísticas do Projeto

### Arquivos
- **Total de Arquivos**: ~150+ arquivos
- **HTML Pages**: 18 páginas
- **CSS Files**: 12 arquivos
- **JavaScript Files**: 15 arquivos
- **PHP Files**: 3 arquivos

### Tamanhos
- **CSS Total**: ~200KB (minificado)
- **JavaScript Total**: ~500KB (minificado)
- **Images**: Variável (otimizadas)

---

## Recursos Futuros Sugeridos

### Otimizações
- **CSS Framework**: Migração para Bootstrap 5 ou Tailwind
- **JavaScript**: Refatoração para ES6+
- **Build Tools**: Webpack/Vite para otimização
- **PWA**: Progressive Web App features

### Funcionalidades
- **CMS Backend**: Para gerenciamento de conteúdo
- **Database**: Integração com MySQL/PostgreSQL
- **API REST**: Para mobile apps
- **Analytics**: Google Analytics implementation

---

## Contato e Suporte

### Desenvolvedor Original
- **Framework Base**: Template Bootstrap vCard
- **Customização**: Serifo Baldé
- **Empresa**: GeeksGuiguis

### Manutenção
- **Email**: serifo.balde@live.com
- **Ano**: © 2026 GeeksGuiguis

---

*Documento atualizado em Janeiro de 2026*