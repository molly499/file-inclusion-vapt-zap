# Web Application Security – File Inclusion VAPT using OWASP ZAP

## Overview
This project demonstrates detection, exploitation, and mitigation of Local File Inclusion (LFI) and Remote File Inclusion (RFI) vulnerabilities in a controlled lab (virtual machine) environment using OWASP ZAP, Kali Linux, and Metasploitable.

## Objectives
- Identify file inclusion vulnerabilities through automated scanning and manual testing  
- Validate exploitability and eliminate false positives  
- Implement OWASP-aligned defenses using allow-list validation  
- Document findings in a structured security report

## Tools Used
- OWASP ZAP – Active scanning & request manipulation  
- Kali Linux – attacker environment  
- Metasploitable 2 with OWASP Mutillidae  
- Manual HTTP parameter testing

## Key Findings
- Path Traversal allowing access to `/etc/passwd`  
- Remote File Inclusion enabling external script inclusion  
- Lack of input validation on page parameter

## Mitigations Implemented
- Server-side allow-list validation  
- Input sanitization using basename filtering  
- Secure coding practices from OWASP SCP

## Learning Outcomes
- Web vulnerability assessment workflow  
- Scanner validation & false-positive reduction  
- Writing professional security findings

## Repository Contents
- Full project report (PDF)
- ZAP Scanning report (PDF)  
- Evidence screenshots  
- Secure implementation code (secure.php)
