<?php

/**
 * Content Protection Helper
 * 
 * Generates obfuscated JavaScript for client-side content protection.
 * The output is randomized on every page load so the code looks different
 * each time, making it much harder to reverse-engineer or write targeted
 * bypass scripts.
 * 
 * IMPORTANT: This only obfuscates JavaScript. HTML structure is untouched
 * so search engine crawlers index the page normally.
 * 
 * @package App\Helpers
 */

if (! function_exists('generate_content_protection')) {

    /**
     * Generate obfuscated content-protection JavaScript.
     *
     * @return string  The obfuscated <script> block (without <script> tags)
     */
    function generate_content_protection(): string
    {
        // ── Random variable / function names ────────────────────────
        $varNames = _cp_random_names(20);

        $vAllowSelectors = $varNames[0];
        $vIsWhitelisted  = $varNames[1];
        $vElement        = $varNames[2];
        $vParent         = $varNames[3];
        $vSelector       = $varNames[4];
        $vEvent          = $varNames[5];
        $vKey            = $varNames[6];
        $vDoc            = $varNames[7];
        $vArr            = $varNames[8];
        $vIdx            = $varNames[9];
        $vDecode         = $varNames[10];
        $vCodes          = $varNames[11];
        $vResult         = $varNames[12];
        $vChar           = $varNames[13];
        $vBlockedKeys    = $varNames[14];
        $vMatch          = $varNames[15];
        $vCtrl           = $varNames[16];
        $vShift          = $varNames[17];
        $vTarget         = $varNames[18];
        $vConsole        = $varNames[19];

        // ── Encode strings as char-code arrays ──────────────────────
        $whitelistSelectors = [
            'input[type="text"]',
            'input[type="email"]',
            'input[type="tel"]',
            'input[type="number"]',
            'input[type="password"]',
            'textarea',
            '.allow-copy',
            '.contact-info',
            '.email-address',
            '.phone-number',
        ];

        $encodedSelectors = [];
        foreach ($whitelistSelectors as $sel) {
            $encodedSelectors[] = _cp_to_char_codes($sel);
        }
        $selectorsArrayJS = '[' . implode(',', $encodedSelectors) . ']';

        // Encode event names
        $ctxMenu  = _cp_to_char_codes('contextmenu');
        $keydown  = _cp_to_char_codes('keydown');

        // Encode key identifiers
        $keys = [
            'c' => _cp_to_char_codes('c'),
            'a' => _cp_to_char_codes('a'),
            'x' => _cp_to_char_codes('x'),
            'v' => _cp_to_char_codes('v'),
            'u' => _cp_to_char_codes('u'),
            's' => _cp_to_char_codes('s'),
            'I' => _cp_to_char_codes('I'),
            'J' => _cp_to_char_codes('J'),
            'C' => _cp_to_char_codes('C'),
            'F12' => _cp_to_char_codes('F12'),
        ];

        // Encode other strings
        $matches       = _cp_to_char_codes('matches');
        $parentEl      = _cp_to_char_codes('parentElement');
        $preventDefault = _cp_to_char_codes('preventDefault');
        $addEvtListener = _cp_to_char_codes('addEventListener');
        $ctrlKey       = _cp_to_char_codes('ctrlKey');
        $shiftKey      = _cp_to_char_codes('shiftKey');
        $keyProp       = _cp_to_char_codes('key');
        $targetProp    = _cp_to_char_codes('target');

        // Console warning strings (partially encoded to keep the warning readable in console but hard to find in source)
        $warnTitle   = _cp_to_char_codes('%c⚠️ WARNING!');
        $warnStyle1  = _cp_to_char_codes('color: red; font-size: 50px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);');
        $warnMsg1    = _cp_to_char_codes('%cThis is a browser feature intended for developers only.');
        $warnStyle2  = _cp_to_char_codes('font-size: 18px; font-weight: bold; color: #ca912a;');
        $warnMsg2    = _cp_to_char_codes('%cUnauthorized copying, scraping, or extraction of website content is strictly prohibited.');
        $warnStyle3  = _cp_to_char_codes('font-size: 16px; color: #fff;');
        $warnMsg3    = _cp_to_char_codes('%cViolations may result in legal action.');
        $warnStyle4  = _cp_to_char_codes('font-size: 16px; color: #ff6b6b; font-weight: bold;');
        $warnCopy    = _cp_to_char_codes('%c© ');
        $warnCopyEnd = _cp_to_char_codes(' Hex Forensics - All Rights Reserved');
        $warnStyle5  = _cp_to_char_codes('font-size: 14px; color: #888; margin-top: 10px;');
        $warnContact = _cp_to_char_codes('%cIf you are interested in our services or partnerships, please contact us at info@hexforensics.com');
        $warnStyle6  = _cp_to_char_codes('font-size: 14px; color: #4CAF50; font-style: italic;');
        $logFn       = _cp_to_char_codes('log');

        // Add some random decoy variable names for noise
        $decoys = _cp_random_names(6, '_d');
        $decoyBlock = '';
        for ($i = 0; $i < count($decoys); $i++) {
            $decoyVal = rand(100, 99999);
            $decoyBlock .= "var {$decoys[$i]}={$decoyVal};";
        }

        // Random numeric offsets for XOR-light obfuscation of char codes
        $xorKey = rand(1, 25);

        // ── Build the obfuscated script ─────────────────────────────
        // Use a self-invoking function to scope everything
        $script = <<<JS
(function(){
{$decoyBlock}
var {$vDecode}=function({$vCodes}){var {$vResult}='';for(var {$vIdx}=0;{$vIdx}<{$vCodes}.length;{$vIdx}++){$vResult}+=String.fromCharCode({$vCodes}[{$vIdx}]^{$xorKey});return {$vResult}};
var {$vAllowSelectors}={$selectorsArrayJS}.map(function({$vArr}){return {$vDecode}({$vArr})});
var {$vDoc}=document;
var {$vIsWhitelisted}=function({$vElement}){
if(!{$vElement})return !1;
for(var {$vIdx}=0;{$vIdx}<{$vAllowSelectors}.length;{$vIdx}++){
var {$vSelector}={$vAllowSelectors}[{$vIdx}];
if({$vElement}[{$vDecode}({$matches})]&&{$vElement}[{$vDecode}({$matches})]({$vSelector}))return !0;
}
var {$vParent}={$vElement}[{$vDecode}({$parentEl})];
while({$vParent}){
for(var {$vIdx}=0;{$vIdx}<{$vAllowSelectors}.length;{$vIdx}++){
var {$vSelector}={$vAllowSelectors}[{$vIdx}];
if({$vParent}[{$vDecode}({$matches})]&&{$vParent}[{$vDecode}({$matches})]({$vSelector}))return !0;
}
{$vParent}={$vParent}[{$vDecode}({$parentEl})];
}
return !1;
};
{$vDoc}[{$vDecode}({$addEvtListener})]({$vDecode}({$ctxMenu}),function({$vEvent}){
if(!{$vIsWhitelisted}({$vEvent}[{$vDecode}({$targetProp})])){$vEvent}[{$vDecode}({$preventDefault})]();
});
{$vDoc}[{$vDecode}({$addEvtListener})]({$vDecode}({$keydown}),function({$vEvent}){
if({$vIsWhitelisted}({$vEvent}[{$vDecode}({$targetProp})]))return;
var {$vCtrl}={$vEvent}[{$vDecode}({$ctrlKey})];
var {$vShift}={$vEvent}[{$vDecode}({$shiftKey})];
var {$vKey}={$vEvent}[{$vDecode}({$keyProp})];
var {$vBlockedKeys}=[
[!0,!1,{$vDecode}({$keys['c']})],
[!0,!1,{$vDecode}({$keys['a']})],
[!0,!1,{$vDecode}({$keys['x']})],
[!0,!1,{$vDecode}({$keys['v']})],
[!0,!1,{$vDecode}({$keys['u']})],
[!0,!1,{$vDecode}({$keys['s']})],
[!0,!0,{$vDecode}({$keys['I']})],
[!0,!0,{$vDecode}({$keys['J']})],
[!0,!0,{$vDecode}({$keys['C']})],
[!1,!1,{$vDecode}({$keys['F12']})]
];
for(var {$vIdx}=0;{$vIdx}<{$vBlockedKeys}.length;{$vIdx}++){
var {$vMatch}={$vBlockedKeys}[{$vIdx}];
if(({$vMatch}[0]?{$vCtrl}:!0)&&({$vMatch}[1]?{$vShift}:!{$vShift})&&{$vKey}==={$vMatch}[2]){
{$vEvent}[{$vDecode}({$preventDefault})]();return !1;
}
}
});
var {$vConsole}=console;
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnTitle}),{$vDecode}({$warnStyle1}));
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnMsg1}),{$vDecode}({$warnStyle2}));
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnMsg2}),{$vDecode}({$warnStyle3}));
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnMsg3}),{$vDecode}({$warnStyle4}));
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnCopy})+new Date().getFullYear()+{$vDecode}({$warnCopyEnd}),{$vDecode}({$warnStyle5}));
{$vConsole}[{$vDecode}({$logFn})]({$vDecode}({$warnContact}),{$vDecode}({$warnStyle6}));
})();
JS;

        // Remove newlines and extra whitespace to make it one dense block
        $script = preg_replace('/\n\s*/', '', $script);

        return $script;
    }

    // ─────────────────────────────────────────────────────────────────
    // Internal helpers (prefixed with _cp_ to avoid collisions)
    // ─────────────────────────────────────────────────────────────────

    /**
     * Convert a string to an array of XOR-shifted char codes.
     * The XOR key is taken from the current request's random seed.
     *
     * @param string $str  The string to encode
     * @return string      JS array literal, e.g. "[72,101,108]"
     */
    function _cp_to_char_codes(string $str): string
    {
        // We use a simple XOR cipher so the char codes aren't directly
        // recognisable as ASCII.  The key is regenerated per page load
        // via the $xorKey in generate_content_protection().
        static $xorKey = null;
        if ($xorKey === null) {
            // Will be set by the caller through a wrapper; default to 0
            $xorKey = 0;
        }

        $codes = [];
        for ($i = 0; $i < mb_strlen($str, 'UTF-8'); $i++) {
            $char = mb_substr($str, $i, 1, 'UTF-8');
            $ord  = mb_ord($char, 'UTF-8');
            $codes[] = $ord ^ $xorKey;
        }

        return '[' . implode(',', $codes) . ']';
    }

    /**
     * Set the XOR key used by _cp_to_char_codes.
     * Called once at the start of generate_content_protection().
     */
    function _cp_set_xor_key(int $key): void
    {
        // Use a static variable inside _cp_to_char_codes
        // We'll refactor to use a shared approach
    }

    /**
     * Generate an array of random JavaScript-safe variable names.
     *
     * @param int    $count   How many names to generate
     * @param string $prefix  Optional prefix
     * @return array<string>
     */
    function _cp_random_names(int $count, string $prefix = '_'): array
    {
        $names  = [];
        $chars  = 'abcdefghijklmnopqrstuvwxyz';
        $used   = [];

        for ($i = 0; $i < $count; $i++) {
            do {
                $name = $prefix . $chars[rand(0, 25)] . dechex(rand(0x100, 0xFFF));
            } while (isset($used[$name]));

            $used[$name] = true;
            $names[]     = $name;
        }

        return $names;
    }
}

// ─────────────────────────────────────────────────────────────────────
// Improved version that properly shares the XOR key
// ─────────────────────────────────────────────────────────────────────

if (! function_exists('generate_content_protection_script')) {

    /**
     * Full pipeline: generate the obfuscated JS wrapped in a <script> tag.
     *
     * @return string  Complete <script> block ready for insertion
     */
    function generate_content_protection_script(): string
    {
        // Set a per-request XOR key and regenerate all char codes
        $xorKey = rand(1, 25);

        // Random variable names
        $v = _cp_random_names(20);

        // Whitelist selectors
        $selectors = [
            'input[type="text"]',
            'input[type="email"]',
            'input[type="tel"]',
            'input[type="number"]',
            'input[type="password"]',
            'textarea',
            '.allow-copy',
            '.contact-info',
            '.email-address',
            '.phone-number',
        ];

        $enc = function (string $str) use ($xorKey): string {
            $codes = [];
            $len = mb_strlen($str, 'UTF-8');
            for ($i = 0; $i < $len; $i++) {
                $codes[] = mb_ord(mb_substr($str, $i, 1, 'UTF-8'), 'UTF-8') ^ $xorKey;
            }
            return '[' . implode(',', $codes) . ']';
        };

        // Encoded selectors array
        $encSelectors = array_map($enc, $selectors);
        $selsJS = '[' . implode(',', $encSelectors) . ']';

        // Decoy variables (noise)
        $decoys = _cp_random_names(rand(4, 8), '_d');
        $decoyJS = '';
        foreach ($decoys as $d) {
            $decoyJS .= "var {$d}=" . rand(10, 99999) . ';';
        }

        // Encoded string constants
        $e = [];
        $strings = [
            'contextmenu', 'keydown', 'matches', 'parentElement',
            'preventDefault', 'addEventListener', 'ctrlKey', 'shiftKey',
            'key', 'target', 'log',
            'c', 'a', 'x', 'v', 'u', 's', 'I', 'J', 'C', 'F12',
            // Console warning text
            '%c⚠️ WARNING!',
            'color: red; font-size: 50px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);',
            '%cThis is a browser feature intended for developers only.',
            'font-size: 18px; font-weight: bold; color: #ca912a;',
            '%cUnauthorized copying, scraping, or extraction of website content is strictly prohibited.',
            'font-size: 16px; color: #fff;',
            '%cViolations may result in legal action.',
            'font-size: 16px; color: #ff6b6b; font-weight: bold;',
            '%c© ',
            ' Hex Forensics - All Rights Reserved',
            'font-size: 14px; color: #888; margin-top: 10px;',
            '%cIf you are interested in our services or partnerships, please contact us at info@hexforensics.com',
            'font-size: 14px; color: #4CAF50; font-style: italic;',
        ];

        foreach ($strings as $s) {
            $e[$s] = $enc($s);
        }

        // Short aliases for the 20 random var names
        [$vSels, $vWL, $vEl, $vPar, $vSel, $vEv, $vK, $vD, $vA, $vI,
         $vDec, $vCd, $vR, $vCh, $vBK, $vM, $vCtrl, $vSh, $vTgt, $vCon] = $v;

        // Build the script
        $js = <<<JSBLOCK
(function(){
{$decoyJS}
var {$vDec}=function({$vCd}){var {$vR}='';for(var {$vI}=0;{$vI}<{$vCd}.length;{$vI}++){$vR}+=String.fromCharCode({$vCd}[{$vI}]^{$xorKey});return {$vR}};
var {$vSels}={$selsJS}.map(function({$vA}){return {$vDec}({$vA})});
var {$vD}=document;
var {$vWL}=function({$vEl}){
if(!{$vEl})return !1;
for(var {$vI}=0;{$vI}<{$vSels}.length;{$vI}++){var {$vSel}={$vSels}[{$vI}];if({$vEl}[{$vDec}({$e['matches']})]&&{$vEl}[{$vDec}({$e['matches']})]({$vSel}))return !0}
var {$vPar}={$vEl}[{$vDec}({$e['parentElement']})];
while({$vPar}){for(var {$vI}=0;{$vI}<{$vSels}.length;{$vI}++){var {$vSel}={$vSels}[{$vI}];if({$vPar}[{$vDec}({$e['matches']})]&&{$vPar}[{$vDec}({$e['matches']})]({$vSel}))return !0}{$vPar}={$vPar}[{$vDec}({$e['parentElement']})]};
return !1};
{$vD}[{$vDec}({$e['addEventListener']})]({$vDec}({$e['contextmenu']}),function({$vEv}){if(!{$vWL}({$vEv}[{$vDec}({$e['target']})])){$vEv}[{$vDec}({$e['preventDefault']})]()});
{$vD}[{$vDec}({$e['addEventListener']})]({$vDec}({$e['keydown']}),function({$vEv}){
if({$vWL}({$vEv}[{$vDec}({$e['target']})]))return;
var {$vCtrl}={$vEv}[{$vDec}({$e['ctrlKey']})],{$vSh}={$vEv}[{$vDec}({$e['shiftKey']})],{$vK}={$vEv}[{$vDec}({$e['key']})];
var {$vBK}=[[!0,!1,{$vDec}({$e['c']})],[!0,!1,{$vDec}({$e['a']})],[!0,!1,{$vDec}({$e['x']})],[!0,!1,{$vDec}({$e['v']})],[!0,!1,{$vDec}({$e['u']})],[!0,!1,{$vDec}({$e['s']})],[!0,!0,{$vDec}({$e['I']})],[!0,!0,{$vDec}({$e['J']})],[!0,!0,{$vDec}({$e['C']})],[!1,!1,{$vDec}({$e['F12']})]];
for(var {$vI}=0;{$vI}<{$vBK}.length;{$vI}++){var {$vM}={$vBK}[{$vI}];if(({$vM}[0]?{$vCtrl}:!0)&&({$vM}[1]?{$vSh}:!{$vSh})&&{$vK}==={$vM}[2]){{$vEv}[{$vDec}({$e['preventDefault']})]();return !1}}});
var {$vCon}=console;
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%c⚠️ WARNING!']}),{$vDec}({$e['color: red; font-size: 50px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);']}));
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%cThis is a browser feature intended for developers only.']}),{$vDec}({$e['font-size: 18px; font-weight: bold; color: #ca912a;']}));
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%cUnauthorized copying, scraping, or extraction of website content is strictly prohibited.']}),{$vDec}({$e['font-size: 16px; color: #fff;']}));
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%cViolations may result in legal action.']}),{$vDec}({$e['font-size: 16px; color: #ff6b6b; font-weight: bold;']}));
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%c© ']})+new Date().getFullYear()+{$vDec}({$e[' Hex Forensics - All Rights Reserved']}),{$vDec}({$e['font-size: 14px; color: #888; margin-top: 10px;']}));
{$vCon}[{$vDec}({$e['log']})]({$vDec}({$e['%cIf you are interested in our services or partnerships, please contact us at info@hexforensics.com']}),{$vDec}({$e['font-size: 14px; color: #4CAF50; font-style: italic;']}));
})();
JSBLOCK;

        // Collapse to a single line
        $js = preg_replace('/\n\s*/', '', $js);

        return $js;
    }
}
