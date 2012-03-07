<!-- Server side optimization for responsive images -->
<img>
    <xsl:attribute name="title">
    	<xsl:text>Don't forget the title!</xsl:text>
    </xsl:attribute>
    <xsl:attribute name="src">
    	<xsl:value-of select="$root"/>
    	<xsl:text>/image/x/</xsl:text> <!-- Don't forget to choose what mode you want. -->
    	<xsl:choose>
    		<xsl:when test="$screen-width &gt; 959">	<!-- Modern desktop -->
    			<xsl:text>960</xsl:text>	<!-- Set this to the maximum size of your element at this media query-->
    		</xsl:when>
    		<xsl:when test="$screen-width &lt; 960 and $screen-width &gt; 480">	<!-- small desktop/handheld -->
    			<xsl:text>768</xsl:text>
    		</xsl:when>
    		<xsl:otherwise>
    			<xsl:text>480</xsl:text>	<!-- Defaults to the smallest image for mobile-first design -->
    		</xsl:otherwise>
    	</xsl:choose>
    	<xsl:text>/0/5</xsl:text>
    	<xsl:value-of select="/@path"/>
    	<xsl:text>/</xsl:text>
    	<xsl:value-of select="/filename"/>
    </xsl:attribute>
</img>