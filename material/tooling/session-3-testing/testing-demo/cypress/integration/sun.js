context('Actions', () => {
  beforeEach(() => {
    cy.visit('https://www.wetteronline.de/')
  })

  it('Look for Gummersbach', () => {
    cy.get("#searchform")
      .find('#searchstring').type('Gummersbach')
    cy.get('#searchform').submit()
  })
})
