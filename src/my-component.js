class MyComponent extends HTMLElement {
    constructor() {
      super();
      this.attachShadow({ mode: 'open' });
  
      // Tạo template
      const template = document.createElement('template');
      template.innerHTML = `
        <style>
          .component {
            border: 1px solid #ccc;
            padding: 10px;
          }
          .title {
            font-weight: bold;
          }
        </style>
        <div class="component">
          <div class="title"><slot name="title"></slot></div>
          <div class="content"><slot name="content"></slot></div>
        </div>
      `;
  
      // Áp dụng template vào shadow DOM
      this.shadowRoot.appendChild(template.content.cloneNode(true));
    }
  }
  
  customElements.define('my-component', MyComponent);