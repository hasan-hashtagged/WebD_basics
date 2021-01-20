<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="www.example.com">
  <xsl:template match="/">
    <html>
      <title>XSL APPLY TEMLATE</title>
      <body>
        <xsl:apply-templates/>
      </body>
    </html>
  </xsl:template>
  <xsl:template match="PRODUCT">
    <p>
      <xsl:apply-templates select="PRODUCTNAME"/>
      <xsl:apply-templates select="PRICE"/>
      <xsl:apply-templates select="QUANTITY"/>
    </p>
  </xsl:template>
  <xsl:template match="PRODUCTNAME">
    PRODUCT NAME: <span>
    <xsl:value-of select="."/></span>
    <br />
  </xsl:template>
  <xsl:template match="PRICE">
    PRICE : <span>
    <xsl:value-of select="."/></span>
    <br />
  </xsl:template>
  <xsl:template match="QUANTITY">
    QUANTITY : <span>
    <xsl:value-of select="."/></span>
    <br />
  </xsl:template>
</xsl:stylesheet>
