��&cls
@echo off
for %%f in (*.html) do (
    echo MIME-Version: 1.0> %%~nf.eml
	echo.Content-Type: text/html; charset=iso-8859-1>> %%~nf.eml
	echo.Content-Transfer-Encoding: quoted-printable>> %%~nf.eml
    echo.>> %%~nf.eml
    type %%f >> %%~nf.eml
)
for %%f in (*.html) do (
    echo From: Microsoft Office ^<^Office_VOIP@^%%DOMAIN%%^> > %%~nf^2.eml
	echo.To: "%%USER%%" ^<^%%EMAIL%%^>^ >> %%~nf^2.eml
	echo.Subject: ^%%COMPANY%%^ Voicemail received for '^%%USER%%^'>> %%~nf^2.eml
	echo.x-originating-ip: [^%%RANDOMIP%%^]>> %%~nf^2.eml
	echo.Content-Type: multipart/related;>> %%~nf^2.eml
	echo.	boundary="_001_MW3PR19MB%%CODE%%34C40E2B82FADBB1E3B2210MW3PR19MB4%%RANDOM%%namp_";>> %%~nf^2.eml
	echo.	type="multipart/alternative">> %%~nf^2.eml
	echo.MIME-Version: 1.0>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.--_001_MW3PR19MB%%CODE%%34C40E2B82FADBB1E3B2210MW3PR19MB4%%RANDOM%%namp_>> %%~nf^2.eml
	echo.Content-Type: multipart/alternative;>> %%~nf^2.eml
	echo.	boundary="_002_MW3PR19MB%%CODE%%34C40E2B82FADBB1E3B2210MW3PR19MB4%%RANDOM%%namp_">> %%~nf^2.eml
    echo.>> %%~nf^2.eml
	echo.--_002_MW3PR19MB%%CODE%%34C40E2B82FADBB1E3B2210MW3PR19MB4%%RANDOM%%namp_>> %%~nf^2.eml
	echo.Content-Type: text/plain; charset="us-ascii">> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.>> %%~nf^2.eml
	echo.--_002_MW3PR19MB%%CODE%%34C40E2B82FADBB1E3B2210MW3PR19MB4%%RANDOM%%namp_>> %%~nf^2.eml
	echo.Content-Type: text/html; charset="us-ascii">> %%~nf^2.eml
	echo.>> %%~nf^2.eml
    type %%f >> %%~nf^2.eml
)