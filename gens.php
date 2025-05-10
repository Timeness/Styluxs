<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terminal Code Writer</title>
  <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #1a1a1a;
      font-family: 'Courier New', monospace;
    }
    .terminal {
      width: 80%;
      max-width: 800px;
      height: 500px;
      background-color: #2d2d2d;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
      overflow: hidden;
    }
    .terminal-header {
      height: 30px;
      background-color: #3c3c3c;
      display: flex;
      align-items: center;
      padding-left: 10px;
    }
    .terminal-buttons {
      display: flex;
      gap: 8px;
    }
    .button {
      width: 12px;
      height: 12px;
      border-radius: 50%;
    }
    .red {
      background-color: #ff5f56;
    }
    .yellow {
      background-color: #ffbd2e;
    }
    .green {
      background-color: #27c93f;
    }
    .terminal-content {
      padding: 20px;
      height: calc(100% - 30px);
      color: #f5f5f5;
      white-space: pre-wrap;
      overflow-y: auto;
    }
    .terminal-content:focus {
      outline: none;
    }
  </style>
</head>
<body>
  <div id="root"></div>
  <script type="text/babel">
    function Terminal() {
      return (
        <div className="terminal">
          <div className="terminal-header">
            <div className="terminal-buttons">
              <div className="button red"></div>
              <div className="button yellow"></div>
              <div className="button green"></div>
            </div>
          </div>
          <div
            className="terminal-content"
            contentEditable
            spellCheck="false"
            onKeyDown={(e) => {
              if (e.key === 'Tab') {
                e.preventDefault();
                document.execCommand('insertText', false, '  ');
              }
            }}
          >
            // Start typing your code here...
          </div>
        </div>
      );
    }

    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<Terminal />);
  </script>
</body>
</html>
