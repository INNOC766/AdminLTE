param(
    [Parameter(Mandatory = $false)]
    [string]$Dist = "..\AdminLTE\dist"
)

$ErrorActionPreference = "Stop"

if (-not (Test-Path -LiteralPath $Dist -PathType Container)) {
    Write-Error "dist folder not found at: $Dist`nUsage: .\setup-assets.ps1 -Dist <path-to-dist>"
}

$targetRoot = Join-Path (Get-Location) "public\adminlte"
$targetCss = Join-Path $targetRoot "css"
$targetJs = Join-Path $targetRoot "js"
$targetImg = Join-Path $targetRoot "img"

New-Item -ItemType Directory -Force -Path $targetCss | Out-Null
New-Item -ItemType Directory -Force -Path $targetJs | Out-Null
New-Item -ItemType Directory -Force -Path $targetImg | Out-Null

$copyMap = @(
    @{ Src = Join-Path $Dist "css\adminlte.min.css";     Dst = $targetCss },
    @{ Src = Join-Path $Dist "css\adminlte.css";         Dst = $targetCss },
    @{ Src = Join-Path $Dist "css\adminlte.rtl.min.css"; Dst = $targetCss },
    @{ Src = Join-Path $Dist "js\adminlte.min.js";       Dst = $targetJs },
    @{ Src = Join-Path $Dist "js\adminlte.js";           Dst = $targetJs }
)

foreach ($item in $copyMap) {
    if (Test-Path -LiteralPath $item.Src -PathType Leaf) {
        Copy-Item -LiteralPath $item.Src -Destination $item.Dst -Force
    }
}

$distImg = Join-Path $Dist "assets\img"
if (Test-Path -LiteralPath $distImg -PathType Container) {
    Copy-Item -Path (Join-Path $distImg "*") -Destination $targetImg -Recurse -Force
}

Write-Host "Done! Assets copied from '$Dist' to 'public\adminlte\'" -ForegroundColor Green
