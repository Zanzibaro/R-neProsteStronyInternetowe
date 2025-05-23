<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    body {
                    font-family: Arial, sans-serif;
                    }
                    #imie {
                    position: absolute;
                    top: 150px;
                    left: 250px;
                    }
                    #adres {
                    position: absolute;
                    top: 180px;
                    left: 250px;
                    }
                    #przedmioty {
                    position: absolute;
                    top: 280px;
                    left: 100px;
                    }
                    .przedmiot {
                    margin-bottom: 10px;
                    }
                </style>
            </head>
            <body
                style="background-image: url(https://biuro.ksml.pl/wp-content/uploads/2020/03/faktura-wewnetrzna2-1024x724.jpg); background-repeat: no-repeat;">
                <div id="imie">
                    <xsl:value-of select="Dane/Osoba/Imie" />
                </div>
                <div id="adres">
                    <xsl:value-of select="Dane/Osoba/Adres" />
                </div>
                <div id="przedmioty">
                    <xsl:for-each select="Dane/Przedmioty/Przedmiot">
                        <div class="przedmiot">
                            <span>
                                <xsl:value-of select="Nazwa" />
                            </span>
                            <br />
                            <span><xsl:value-of select="Cena" /> PLN</span>
                        </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>