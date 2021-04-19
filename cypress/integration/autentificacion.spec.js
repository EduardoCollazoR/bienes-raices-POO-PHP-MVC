/// <reference types="cypress"/>
describe("Probar la autentificacion", () => {
  it("Prueba de la autentificacion en /login", () => {
    cy.visit("/login");

    cy.get('[data-cy="heading-login"]').should("exist");

    cy.get('[data-cy="heading-login"]').should("have.text", "Iniciar Sesion");

    cy.get('[data-cy="formulario-login"]').should("exist");

    //ambos campos son obligatorios
    cy.get('[data-cy="formulario-login"]').submit();
    cy.get('[data-cy="alerta-login"]').should("exist");
    cy.get('[data-cy="alerta-login"]').eq(0).should("have.class", "error");
    cy.get('[data-cy="alerta-login"]')
      .eq(0)
      .should("have.text", "El Email es obligatorio");

    cy.get('[data-cy="alerta-login"]').eq(1).should("have.class", "error");
    cy.get('[data-cy="alerta-login"]')
      .eq(1)
      .should("have.text", "El Password es obligatorio");
    //el usuario exista

    //verificar el password
  });
});
