/// <reference types="cypress" />



describe('Register user and log in and log out', ()=>{

    it('Get to registration page, fill register form, submit and then login', ()=>{
        cy.visit("index.php")
        cy.get(".account-login-href-cy").click()
        cy.get(".account-register-href-cy").click()

        cy.get('.username-cy').type('thisIsUser')
        cy.get('.email-cy').type('test-cy@gmail.com')
        cy.get('.password-cy').type('something12')
        cy.get('.passwordcon-cy').type('something12')
        cy.get('.submit-cy').click()

        cy.get('.email-cy').type('test-cy@gmail.com')
        cy.get('.password-cy').type('something12')
        cy.get('.submit-cy').click()
    })
})