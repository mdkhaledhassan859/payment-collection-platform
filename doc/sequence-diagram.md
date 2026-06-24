# Payment System Sequence Diagram

```mermaid
sequenceDiagram

participant Student
participant API
participant bKash
participant DB
participant Reconciliation

Student->>API: Create Payment Request
API->>API: Validate Request
API->>bKash: Send Payment (cURL)
bKash-->>API: Payment Response
API->>DB: Store Transaction

bKash-->>API: Callback Webhook
API->>DB: Update Transaction Status

Reconciliation->>DB: Fetch Transactions
Reconciliation->>Reconciliation: Match & Validate
Reconciliation-->>DB: Update Report Status
