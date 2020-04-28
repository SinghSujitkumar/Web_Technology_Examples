<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/"> 
 <html> 
 <body> 
  <h1 align="center">Books</h1> 
   <table border="3" align="center" > 
   <tr> 
    <th>Name</th> 
    <th>Author</th> 
    <th>Year Published</th> 
     <th>Semester</th> 
   </tr> 
    <xsl:for-each select="books/book">
    <xsl:if test="yearpublished>1995">
    <tr> 
    <td><xsl:value-of select="name"/></td> 
    <td><xsl:value-of select="author"/></td> 
    <td><xsl:value-of select="yearpublished"/></td> 
    <td><xsl:value-of select="sem"/></td> 
   </tr>
    </xsl:if>
    </xsl:for-each> 
    </table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet>
